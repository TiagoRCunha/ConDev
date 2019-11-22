import React, { Component } from 'react';
import { View, Text, ScrollView } from 'react-native';
import Estilo from './Estilo'
import CustomTextInput from '../../components/CustomTextInput'
import NavBar from '../../components/NavBar'

//Botoes
import { BotaoDesenvolvedor, BotaoStartup, BotaoVoltar, BotaoSalvar } from '../../components/Button'





export default class EditarPerfil extends Component {

    constructor(props){
        super(props)
    }



    componentDidMount() {
        console.log(this.props.navigation.state.routeName)
    }

    render() {
        return (
            <ScrollView>
                <NavBar
                text="Editar perfil" />
                <View style={Estilo.view}>
                    
                    <CustomTextInput
                        label={"Nome"} />
                    <CustomTextInput
                        label={"Email"} />
                    <CustomTextInput
                        label={"Telefone"} />
                    <CustomTextInput
                        label={"CPF"} />
                    <BotaoSalvar />
                    <BotaoVoltar
                        onPress={() => this.props.navigation.goBack()}
                    />

                    <View style={Estilo.line}></View>
                </View>
            </ScrollView>

        );
    }
}
