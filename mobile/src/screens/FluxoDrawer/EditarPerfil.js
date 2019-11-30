import React, { Component } from 'react';
import { View, Text, ScrollView, TextInput } from 'react-native';
import Estilo from './Estilo'
import CustomTextInput from '../../components/CustomTextInput'
import NavBar from '../../components/NavBar'

//Botoes
import { BotaoDesenvolvedor, BotaoStartup, BotaoVoltar, BotaoSalvar } from '../../components/Button'






export default class EditarPerfil extends Component {

    constructor(props) {
        super(props)
    }



    componentDidMount() {
        console.log(this.props.navigation.state.routeName)
    }

    render() {
        return (
            <ScrollView showsVerticalScrollIndicator={false}>
                <NavBar
                    text="Editar perfil" />
                <ScrollView>

                    <View style={{ padding: 10,width: '100%' }}>

                        <CustomTextInput
                            label={"Nome"} />
                        <CustomTextInput
                            label={"Email"} />
                        <CustomTextInput
                            label={"Telefone"} />
                        <CustomTextInput
                            label={"CPF"} />
                        <View style={{ alignItems: 'center' }}>
                            <Text style={{marginBottom:5 }}>Descreva o seu perfil e suas habilidades</Text>
                            <TextInput
                                
                                style={{ borderWidth: 1, borderRadius: 5, width: '100%', height: '40%' }} />
                            <BotaoSalvar />
                            <BotaoVoltar
                                onPress={() => this.props.navigation.goBack()}
                            />
                        </View>
                    </View>

                    <View style={Estilo.line}></View>
                </ScrollView>
            </ScrollView>

        );
    }
}
