import React, { Component } from 'react';
import { View, Text, TextInput, ScrollView, Alert } from 'react-native';
import Estilo from '../Home/Estilo'
import { BotaoEntrar, BotaoVoltar } from '../../components/Button'
import Ionicons from 'react-native-vector-icons/Ionicons'

const google = <Ionicons
    name="logo-google"
    size={30}
    color='#000000'
/>

export default class Google extends Component {
    render() {
        return (
            <ScrollView>
                <View style={Estilo.view}>
                    <View style={{...Estilo.image, marginBottom: 0}}>
                        <Text style={Estilo.text}>
                            ConDev
                        </Text>
                    </View>
                    <View style={{ alignItems: 'center', margin: 20}}>
                        <Text style={{ marginBottom: 10, fontSize: 16}}>Entrar com o Google</Text>
                        {google}

                    </View>
                    <View style={Estilo.view1}>
                        <View style={{ ...Estilo.textInput, marginBottom: 30 }}>
                            <TextInput
                                placeholder="Email"
                            />
                        </View>
                        <View style={{ ...Estilo.textInput, marginBottom: 5 }}>
                            <TextInput
                                placeholder="Senha" />
                        </View>
                        <View style={{ flexDirection: 'row', width: '100%' }}>
                            <Text>                             </Text>
                        </View>

                        <BotaoEntrar
                            onPress={() => Alert.alert('ConDev', 'Trabalhando fera')} />
                        <BotaoVoltar
                            onPress={() => this.props.navigation.goBack()}
                        />
                        <View style={Estilo.line}></View>
                    </View>
                </View >
            </ScrollView>

        );
    }
}
