import { Platform, StyleSheet } from 'react-native';

export default StyleSheet.create({
    view: {
        alignItems: 'center',
        justifyContent: 'center',
        flex: 1,
        paddingVertical: 50
    },
    view1: {
        padding: 0,
        alignItems: 'center',
        justifyContent: 'center'
    },
    textInput: {
        backgroundColor: 'white',
        borderColor: 'black',
        borderWidth: 1,
        borderRadius: 5,
        width: 250
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
        width: 300,
        borderWidth: 0.3,
        marginTop: 50
    },
    esqueciSenha: {
        alignItems: "flex-end",
        justifyContent: 'flex-end'

    },
    textSenha: {
        fontSize: 12
    },
    textoGL: {
        marginTop: 0,
        marginLeft: 5

    },
    viewGL: {
        flexDirection: 'row',
        alignItems: 'center',
        justifyContent: 'center',
        marginTop: 20
    },
    viewMenu: {
        height: 50,
        flexDirection: 'row',
        alignItems: 'center',
        backgroundColor: '#fff',
        elevation: 10
        
    }

})