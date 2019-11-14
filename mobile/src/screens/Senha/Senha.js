import React, { Component } from 'react';
import { View, Text, TextInput, ScrollView, Alert } from 'react-native';
import Estilo from '../Home/Estilo'
import { BotaoEnviar, BotaoVoltar } from '../../components/Button'


export default class Senha extends Component {
  render() {
    return (
      <ScrollView> 
        <View style={Estilo.view}>
          <View style={Estilo.image}>
            <Text style={Estilo.text}>
              ConDev
          </Text>
          </View>
          <View style={Estilo.view1}>
            <View style={{ ...Estilo.textInput, marginBottom: 30 }}>
              <TextInput
                placeholder="Email"
              />
            </View>
            <BotaoEnviar
            onPress={() => Alert.alert('ConDev','Trabalhando fera')} />
            <BotaoVoltar 
            onPress={() => this.props.navigation.goBack()}
            />
              
            
          </View>
        </View >
      </ScrollView>

    );
  }
}
