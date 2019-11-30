import React, { Component } from 'react';
import { View, Text, ScrollView, TouchableOpacity } from 'react-native';
import Estilo from './Estilo'
import CustomTextInput from '../../components/CustomTextInput'
import NavBar from '../../components/NavBar'
import Ionicons from 'react-native-vector-icons/Ionicons'

//Botoes
import { BotaoDesenvolvedor, BotaoStartup, BotaoVoltar, BotaoSalvar, BotaoSeguidores } from '../../components/Button'

const person = <Ionicons
    name="md-person"
    size={50}
    color='#000000'
/>



export default class DetalheSeguidores extends Component {

    constructor(props) {
        super(props)
    }

    componentDidMount() {
        console.log(this.props.navigation.state.routeName)
    }

    render() {
        return (
            <ScrollView style={{ flex: 1, height: '100%' }}>
                <NavBar
                    text="Seguidores" />
                <View style={{ alignItems: 'center', justifyContent: 'center', flex: 1, height: 500 }}>
                    <View style={{ borderWidth: 1, padding: 15, alignItems: 'center', justifyContent: 'center', borderRadius: 50, height: 100, width: 100 }}>
                        {person}
                    </View>
                    <Text style={{ fontSize: 25, color: 'gray' }}>Victor Corassa Pinheiro</Text>
                    <Text style={{ fontSize: 20, color: 'gray' }}>React-Native front-end developer</Text>
                    <TouchableOpacity>
                        <Text style={{ fontSize: 15, color: 'gray', marginTop: 20 }}>Iniciar conversa</Text>
                    </TouchableOpacity>
                    
                </View>

            </ScrollView>

        );
    }
}
