import React, { Component } from 'react';
import { View, Text, TextInput, TouchableOpacity } from 'react-native';
import Estilo from '../Home/Estilo'

//Botoes
import { BotaoDesenvolvedor, BotaoStartup, BotaoVoltar } from '../../components/Button'





export default class TipoCadastro extends Component {
    render() {
        return (
            <View style={Estilo.view}>
                <View style={Estilo.image}>
                    <Text style={Estilo.text}>
                        ConDev
                    </Text>
                </View>
                <BotaoDesenvolvedor
                onPress={() => this.props.navigation.push('Desenvolvedor')}
                />
                <BotaoStartup 
                onPress={() => this.props.navigation.push('Startup')}
                />
                <BotaoVoltar
                onPress={() => this.props.navigation.goBack()}
                />
                <View style={Estilo.line}></View>
            </View>

        );
    }
}
