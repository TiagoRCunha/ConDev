import React, { Component } from 'react';
import { View, Text, TextInput, TouchableOpacity } from 'react-native';
import Ionicons from 'react-native-vector-icons/Ionicons'

const google = <Ionicons
    name="logo-google"
    size={30}
    color='#000000'
/>

const linkedin = <Ionicons
    name="logo-linkedin"
    size={30}
    color='#000000'
/>

export class BotaoEntrar extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <TouchableOpacity>
                <View style={{ borderWidth: 0.3, borderRadius: 10, paddingHorizontal: 30, paddingVertical: 10, margin: 20 }}>
                    <Text>Entrar</Text>
                </View>
            </TouchableOpacity>



        );
    }
}



export class BotaoCadastrar extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <TouchableOpacity>
                <View>
                    <Text>Cadastrar</Text>
                </View>
            </TouchableOpacity>



        );
    }
}

export class BotaoEsqueciSenha extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <TouchableOpacity>
                <View style={{ alignItems: "flex-end", justifyContent: 'flex-end', marginleft: 20 }}>
                    <Text style={{ fontSize: 12 }}>
                        Esqueci minha senha
              </Text>
                </View>
            </TouchableOpacity>



        );
    }
}

export class BotaoGoogle extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <TouchableOpacity>
                <View style={{
                    flexDirection: 'row',
                    alignItems: 'center',
                    justifyContent: 'center',
                    marginTop: 20, 
                    marginLeft: -20
                }}>
                    {google}
                    <Text style={{marginLeft: 5}}>Entrar com Google</Text>
                </View>
            </TouchableOpacity>



        );
    }
}

export class BotaoLinkedin extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <TouchableOpacity>
                <View style={{
                    flexDirection: 'row',
                    alignItems: 'center',
                    justifyContent: 'center',
                    marginTop: 20, 
                    marginLeft: -10
                }}>
                    {linkedin}
                    <Text style={{marginLeft: 5}}>Entrar com Linkedin</Text>
                </View>
            </TouchableOpacity>



        );
    }
}
