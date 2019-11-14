import React, { Component } from 'react'
import {
    StyleSheet,
    View,
    TextInput,
    Text
} from 'react-native'

const criarValidacao = (regras) => {
    const isObject = function (item) {
        return (item && typeof item === 'object' && !Array.isArray(item));
    }
    const mergeDeep = function (target, ...sources) {
        if (!sources.length) return target;
        const source = sources.shift();

        if (isObject(target) && isObject(source)) {
            for (const key in source) {
                if (isObject(source[key])) {
                    if (!target[key]) Object.assign(target, { [key]: {} });
                    mergeDeep(target[key], source[key]);
                } else {
                    Object.assign(target, { [key]: source[key] });
                }
            }
        }
        return mergeDeep(target, ...sources);
    }

    const regrasPadroes = {
        requerido: { ativa: false, mensagem: "*Campo é obrigatório", validar: texto => texto != null && texto.length > 0 },
        email: {
            ativa: false, mensagem: "*E-mail invalido", validar: email => {
                let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            }
        }
    }

    const instanciarRegras = regras => {
        let regrasComponente = mergeDeep(regrasPadroes, regras);

        const encapsularValidacao = regra => texto => {
            let valido = true;
            if (regra.ativa == true) {
                try {
                    valido = regra.validar(texto);
                } catch (error) {
                    console.debug("Erro de validacao", { error });
                }
            }
            return {
                valido: valido == null || valido == true,
                mensagem: regra.mensagem
            };
        };

        return Object.keys(regrasComponente).map(key => encapsularValidacao(regrasComponente[key]));
    }

    const validacoes = instanciarRegras(regras);

    const validar = text => {
        let resultados = [];

        Object.keys(validacoes).forEach(key => {
            let validacao = validacoes[key];
            resultados.push(validacao(text));
        });

        return {
            valido: resultados.find(r => r.valido == false) == null,
            errors: resultados.filter(r => r.valido == false)
        }
    }

    return { validar, validacoes };
}

export default class CustomInput extends Component {
    constructor(props) {
        super(props);

        this.state = {
            valido: true,
            mensagem: '',
            validacao: criarValidacao(props.regras)
        };
    }

    componentDidMount() {
        let resultado = this.state.validacao.validar(this.props.texto);
        let mensagem = !resultado.valido ? resultado.errors[0].mensagem : "";
        this.setState({ valido: resultado.valido, mensagem });
    }

    onChangeText(texto) {
        let resultado = this.state.validacao.validar(texto);
        let mensagem = !resultado.valido ? resultado.errors[0].mensagem : "";
        this.setState({ valido: resultado.valido, mensagem });
        this.props.onChangeText(texto, resultado.valido);
    }

    getProp(prop, padrao) {
        return prop != null ? prop : padrao;
    }

    render() {
        var valido = this.state.valido == null || this.state.valido == true;
        return (
            <View style={style.container}>
                <View style={style.containerInput}>
                    <TextInput
                        // style={(!valido && this.props.isSubmit) ? style.inputError : style.input}
                        placeholder={this.props.label}
                        // onChangeText={texto => this.onChangeText(texto)}
                        // autoCompleteType={this.getProp(this.props.autoCompleteType, 'off')}
                        // secureTextEntry={this.getProp(this.props.secureTextEntry, false)}
                        // keyboardType={this.getProp(this.props.keyboardType, 'default')}
                        // autoCorrect={false}
                        // value={this.props.value}
                    ></TextInput>
                </View>
                {!valido && this.props.isSubmit && <Text style={style.error}>{this.state.mensagem}</Text>}
            </View>
        )
    }
}

const style = StyleSheet.create({
    container: {
        marginBottom: 20,
    },
    containerInput: {
        flexDirection: 'column',
        width: 200,
        backgroundColor: '#fff',
        borderWidth: 1,
        borderColor: 'black',
        borderRadius: 8,
        

    },
    input: {
        fontSize: 16,
        lineHeight: 20,
        textAlignVertical: 'bottom',
        // backgroundColor:'red',
        paddingLeft: 16,
        paddingRight: 16,
        borderRadius: 8,

        opacity: 0.7,
        fontFamily: 'Roboto'
        // height:40

    },
    inputError: {
        fontSize: 14,
        lineHeight: 20,
        textAlignVertical: 'bottom',
        // backgroundColor:'red',
        borderColor: '#ef3434',
        borderWidth: 1,
        paddingLeft: 16,
        paddingRight: 16,
        borderRadius: 8,

        opacity: 0.7,
        fontFamily: 'Roboto'
        // height:40

    },
    error: {
        textAlign: 'right',
        color: '#ef3434',
    }
})
