import React, { Component } from 'react';
import { View, Text, ScrollView, TouchableOpacity } from 'react-native';
import Estilo from './Estilo'
import CustomTextInput from '../../components/CustomTextInput'
import NavBar from '../../components/NavBar'
import Ionicons from 'react-native-vector-icons/Ionicons'

//Botoes
import { BotaoDesenvolvedor, BotaoStartup, BotaoVoltar, BotaoSalvar, BotaoSeguidores } from '../../components/Button'




export default class Seguidores extends Component {

    constructor(props) {
        super(props)
    }

    componentDidMount() {
        console.log(this.props.navigation.state.routeName)
    }

    render() {
        return (
            <ScrollView style={{ flex: 1 }}>
                <NavBar
                    text="Seguidores" />
                <BotaoSeguidores
                onPress={()=> this.props.navigation.navigate('DetalheSeguidores')} />
                <BotaoSeguidores />
                <BotaoSeguidores />
                <BotaoSeguidores />

            </ScrollView>

        );
    }
}
