import React, { Component } from 'react';
import { View, Text, TextInput, ScrollView, Alert } from 'react-native';
import Estilo from './Estilo'
import { BotaoEntrar, BotaoCadastrar, BotaoEsqueciSenha, BotaoGoogle, BotaoLinkedin } from '../../components/Button'




export default class Home extends Component {
  constructor(props){
    super(props)
    this.state={
      login: 'condev',
      senha: '123456',
      isValid: {
        login: false,
        senha: false
      }
    }
  }

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
                placeholder="Login"
                
              />
            </View>
            <View style={{ ...Estilo.textInput, marginBottom: 5 }}>
              <TextInput
                placeholder="Senha" />
            </View>
            <View style={{ flexDirection: 'row', width: '100%' }}>
              <Text>                             </Text>
              <BotaoEsqueciSenha
              onPress={() => this.props.navigation.push('Senha')} />
            </View>

            <BotaoEntrar
            onPress={() => this.props.navigation.push('Feed')} />
            <BotaoCadastrar
              onPress={() => this.props.navigation.push('TipoCadastro')}
            />
            <View style={Estilo.line}></View>
            <View>
              <BotaoGoogle 
              onPress={() => this.props.navigation.push('Google')}
              />
              <BotaoLinkedin 
              onPress={() => this.props.navigation.push('Linkedin')}
              />
            </View>
          </View>
        </View >
      </ScrollView>

    );
  }
}
