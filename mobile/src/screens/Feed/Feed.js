import React, { Component } from 'react';
import { View, Text, TextInput, ScrollView, Alert } from 'react-native';
import Estilo from './Estilo'
import { BotaoEntrar, BotaoCadastrar, BotaoEsqueciSenha, BotaoGoogle, BotaoLinkedin } from '../../components/Button'




export default class Feed extends Component {
  render() {
    return (
      <ScrollView>
        <ScrollView
        style={{ borderWidth: 1, height: 50}}
        horizontal>
          <Text>ScrollView</Text>
          <Text>ScrollView</Text>
          <Text>ScrollView</Text>
          <Text>ScrollView</Text>
          <Text>ScrollView</Text>
          <Text>ScrollView</Text>
          <Text>ScrollView</Text>
        </ScrollView>
        <View style={Estilo.view}>
          <Text>
            Feed
          </Text>
        </View >
      </ScrollView>

    );
  }
}
