import React, { Component } from 'react';
import { View, Text, TextInput, TouchableOpacity } from 'react-native';
import Estilo from './Estilo'

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
          <View style={{ ...Estilo.textInput, marginBottom: 40 }}>
            <TextInput
              placeholder="Login"
            />
          </View>
          <View style={{ ...Estilo.textInput, marginBottom: 5 }}>
            <TextInput
              placeholder="Senha" />
          </View>
          <TouchableOpacity>
            <View style={Estilo.esqueciSenha}>
              <Text style={Estilo.textSenha}>
                Esqueci minha senha
              </Text>
            </View>
          </TouchableOpacity>
          <View style={Estilo.line}>

          </View>
        </View>
      </View>

    );
  }
}
