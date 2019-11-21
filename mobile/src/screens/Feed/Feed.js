import React, { Component } from 'react';
import { View, Text, TextInput, ScrollView, Alert, TouchableOpacity } from 'react-native';
import Estilo from './Estilo'
import { BotaoEntrar, BotaoCadastrar, BotaoEsqueciSenha, BotaoGoogle, BotaoLinkedin } from '../../components/Button'
import NavBar from '../../components/NavBar'




export default class Feed extends Component {
  render() {
    return (
      <ScrollView>
        
        <View style={{
          flexDirection: 'row',
          width: '100%',
          
        }}>
          <NavBar
          LarguraMenuFeed={{...Estilo.viewMenu, width: '15%'}} />
          <ScrollView
            style={{height: 50, width: '80%' }}
            horizontal
            showsHorizontalScrollIndicator={false}>
            <Text>ScrollView</Text>
            <Text>ScrollView</Text>
            <Text>ScrollView</Text>
            <Text>ScrollView</Text>
            <Text>ScrollView</Text>
            <Text>ScrollView</Text>
            <Text>ScrollView</Text>
          </ScrollView>
          

        </View>

        <View style={Estilo.view}>
          <TouchableOpacity
            onPress={() => {
              this.props.navigation.toggleDrawer()
            }}>
            <Text>
              Feed
          </Text>
          </TouchableOpacity>

        </View >
      </ScrollView>

    );
  }
}
