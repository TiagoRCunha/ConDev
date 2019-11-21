import React, { Component } from 'react';
import { View, Text, ScrollView } from 'react-native';
import Estilo from './Estilo'
import CustomTextInput from '../../components/CustomTextInput'

//Botoes
import { BotaoDesenvolvedor, BotaoStartup, BotaoVoltar, BotaoSalvar } from '../../components/Button'





export default class EditarPerfil extends Component {
    render() {
        return (
            <ScrollView>
                <View style={Estilo.view}>
                    <View style={Estilo.image}>
                        <Text style={Estilo.text}>
                            ConDev
                    </Text>
                    </View>
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
