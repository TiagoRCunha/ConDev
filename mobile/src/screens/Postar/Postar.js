import React, { Component } from 'react';
import { View, Text, TextInput, ScrollView, Alert } from 'react-native';
import Estilo from './Estilo'
import { BotaoEntrar, BotaoCadastrar, BotaoEsqueciSenha, BotaoGoogle, BotaoLinkedin } from '../../components/Button'
import NavBar from '../../components/NavBar'


export default class Postar extends Component {
    render() {
        return (
            <ScrollView>
                <NavBar
                    text="Postar" />
                <View style={Estilo.view}>

                </View>
            </ScrollView>

        );
    }
}
