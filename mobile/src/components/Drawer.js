
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

    constructor(props) {
        super(props)
    }

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
            <ScrollView
                showsVerticalScrollIndicator={false}
            >

                <NavBar
                    LarguraMenuFeed
                />
                <View style={{ height: 120, backgroundColor: 'white', alignItems: 'center', justifyContent: 'center', borderBottomWidth: 0.3, paddingBottom: 20 }}>
                    {person}

                </View>
                <View style={{ height: 400 }}>
                    <TouchableOpacity
                        onPress={() => {
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
                        <View>
                            {this.navLink('Configuracoes', 'Configuracoes')}

                        </View>
                    </TouchableOpacity>
                    <TouchableOpacity>
                        <View>
                            {this.navLink('Seguidores', 'Seguidores')}
                        </View>
                    </TouchableOpacity>
                    <TouchableOpacity>
                        {this.navLink('HomeStack', 'Sair')}
                    </TouchableOpacity>

                </View>
            </ScrollView>
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