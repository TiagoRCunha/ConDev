
import React, { Component } from 'react';
import {
    View,
    ScrollView,
    Text,
    Image,
    Switch,
    TouchableOpacity,
    FlatList,
    Alert,
    StyleSheet
} from 'react-native';
import SafeAreaView from 'react-native-safe-area-view';
import { DrawerItems } from 'react-navigation-drawer';
import Estilo from '../screens/Home/Estilo';
import Ionicons from 'react-native-vector-icons/Ionicons'
import { withNavigation } from 'react-navigation';
import NavBar from './NavBar'

const person = <Ionicons
    name="md-person"
    size={100}
    color='#000000'
/>

class CustomDrawerContentComponent extends Component {
    navLink(nav, text) {
        return (
            <TouchableOpacity
                onPress={() => {
                    this.props.navigation.navigate(nav)
                }}>
                <Text style={{ fontSize: 25, margin: 20 }}>{text}</Text>
            </TouchableOpacity>
        )
    }
    render() {
        return (
            <View>
                <View style={styles.container}>
                    <Text>Teste</Text>
                </View>
                <NavBar
                LarguraMenuFeed
                />
                <View style={{ height: 200, backgroundColor: 'white', alignItems: 'center', justifyContent: 'center', borderBottomWidth: 0.3 }}>
                    {person}
                    
                </View>
                <View style={{ height: 400 }}>
                    <TouchableOpacity
                    onPress={()=> {
                        // this.props.navigation.push('EditarPerfil')
                    }}>
                        <Text style={{ fontSize: 25, margin: 20 }}>
                            Modo escuro
                        </Text>
                    </TouchableOpacity>
                    <View>
                        {this.navLink('EditarPerfil', 'Editar perfil')}
                    </View>
                    <TouchableOpacity>
                        <Text style={{ fontSize: 25, margin: 20 }}>
                            Configurações
                        </Text>
                    </TouchableOpacity>
                    <TouchableOpacity>
                        <Text style={{ fontSize: 25, margin: 20 }}>
                            Seguidores
                        </Text>
                    </TouchableOpacity>
                    <TouchableOpacity>
                        <Text style={{ fontSize: 15, margin: 20 }}>
                            Sair
                        </Text>
                    </TouchableOpacity>

                </View>
            </View>
        )
    }

};

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: 'white'
    },
});

export default withNavigation(CustomDrawerContentComponent);