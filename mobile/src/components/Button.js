import React, { Component } from 'react';
import { View, Text, TouchableOpacity } from 'react-native';
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
            <TouchableOpacity
            onPress={this.props.onPress}>
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
            <TouchableOpacity
            onPress={this.props.onPress}
            
            >
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
            <TouchableOpacity
            onPress={this.props.onPress}>
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
            <TouchableOpacity
            onPress={this.props.onPress}
            >
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
            <TouchableOpacity
            onPress={this.props.onPress}
            >
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

export class BotaoDesenvolvedor extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <TouchableOpacity
            onPress={this.props.onPress}>
                <View style={{ borderWidth: 0.3, borderRadius: 10, paddingHorizontal: 30, paddingVertical: 10, margin: 20 }}>
                    <Text>Desenvolvedor</Text>
                </View>
            </TouchableOpacity>
        );
    }
}

export class BotaoStartup extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <TouchableOpacity
            onPress={this.props.onPress}>
                <View style={{ borderWidth: 0.3, borderRadius: 10, paddingHorizontal: 30, paddingVertical: 10, margin: 0 }}>
                    <Text>       Startup       </Text>
                </View>
            </TouchableOpacity>
        );
    }
}

export class BotaoVoltar extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <TouchableOpacity
            onPress={this.props.onPress}
            
            >
                <View style={{marginTop: 30}}>
                    <Text>Voltar</Text>
                </View>
            </TouchableOpacity>



        );
    }
}

export class BotaoSalvar extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <TouchableOpacity>
                <View style={{ borderWidth: 0.3, borderRadius: 10, paddingHorizontal: 30, paddingVertical: 10, margin: 20 }}>
                    <Text>Salvar</Text>
                </View>
            </TouchableOpacity>



        );
    }
}

export class BotaoFuncionarios extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <TouchableOpacity
            onPress={this.props.onPress}>
                <View style={{ paddingHorizontal: 2, paddingVertical: 2 }}>
                    <Text>{this.props.quantidade}</Text>
                </View>
            </TouchableOpacity>
        );
    }
}

export class BotaoEnviar extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <TouchableOpacity
            onPress={this.props.onPress}>
                <View style={{ borderWidth: 0.3, borderRadius: 10, paddingHorizontal: 30, paddingVertical: 10, margin: 20 }}>
                    <Text>Enviar</Text>
                </View>
            </TouchableOpacity>



        );
    }
}