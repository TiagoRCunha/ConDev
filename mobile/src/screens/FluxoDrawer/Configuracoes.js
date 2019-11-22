import React, { Component } from 'react';
import { View, Text, ScrollView } from 'react-native';
import Estilo from './Estilo'
import CustomTextInput from '../../components/CustomTextInput'
import NavBar from '../../components/NavBar'

//Botoes
import { BotaoDesenvolvedor, BotaoStartup, BotaoVoltar, BotaoSalvar } from '../../components/Button'





export default class Configuracoes extends Component {

    constructor(props) {
        super(props)
    }

    componentDidMount() {
        console.log(this.props.navigation.state.routeName)
    }

    render() {
        return (
            <ScrollView>
                <NavBar
                    text="Configurações" />
                <View style={Estilo.view}>

                </View>
            </ScrollView>

        );
    }
}
