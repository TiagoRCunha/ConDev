import React, { Component } from 'react';
import { View, Text, TextInput, TouchableOpacity } from 'react-native';
import Estilo from './Estilo'
import { BotaoEntrar, BotaoCadastrar, BotaoEsqueciSenha, BotaoGoogle, BotaoLinkedin } from '../../components/Button'




export default class mobile extends Component {
  render() {
    return (
      <View style={Estilo.view}>
        <View style={Estilo.image}>
          <Text style={Estilo.text}>
            ConDev
          </Text>
        </View>
        <View style={Estilo.view1}>
          <View style={{ ...Estilo.textInput, marginBottom: 30 }}>
            <TextInput
              placeholder="Login"
            />
          </View>
          <View style={{ ...Estilo.textInput, marginBottom: 5 }}>
            <TextInput
              placeholder="Senha" />
          </View>
          <View style={{ flexDirection: 'row',width: '100%'}}>
            <Text>                             </Text>
            <BotaoEsqueciSenha />
          </View>
          
          <BotaoEntrar />
          <BotaoCadastrar />
          <View style={Estilo.line}></View>
          <View>
            <BotaoGoogle />
            <BotaoLinkedin />
          </View>
        </View>
      </View >

    );
  }
}
