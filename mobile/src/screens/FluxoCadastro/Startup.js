import React, { Component } from 'react';
import { View, Text, ScrollView } from 'react-native';
import Estilo from '../Home/Estilo'
import CustomTextInput from '../../components/CustomTextInput'

//Botoes
import { BotaoDesenvolvedor, BotaoStartup, BotaoVoltar, BotaoSalvar } from '../../components/Button'
import { Accordion } from '../../components/Accordion';





export default class Startup extends Component {
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
                        label={"Nome da empresa"} />
                    <View style={{ ...Estilo.textInput, marginBottom: 30, width: 200, justifyContent: 'center', paddingLeft: 5 }}>
                        <Accordion />
                    </View>
                    <CustomTextInput
                        label={"CNPJ"} />
                    <CustomTextInput
                        label={"Senha"} />
                    <CustomTextInput
                        label={"Confirmar senha"} />
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
