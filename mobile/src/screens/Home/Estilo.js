import { Platform, StyleSheet } from 'react-native';


export default StyleSheet.create({
    view: {
        alignItems: 'center',
        justifyContent: 'center',
        borderWidth: 1,
        flex: 1
    },
    view1: {
        padding: 10,
        alignItems: 'center',
        justifyContent: 'center'
    },
    textInput: {
        backgroundColor: 'white',
        borderColor: 'black',
        borderWidth: 1,
        borderRadius: 5,
        width: 200
    },
    image: {
        height: 100,
        width: 100,
        borderRadius: 50,
        borderWidth: 1,
        alignItems: 'center',
        justifyContent: 'center',
        marginBottom: 50
    },
    text: {
        fontSize: 20
    },
    line: {
        width: 250,
        borderWidth: 1,
        marginTop: 50
    },
    esqueciSenha:{
        alignItems: "flex-end"

    },
    textSenha: {
        fontSize: 12
    }

})