import React, { Component } from 'react';
import { createStackNavigator } from 'react-navigation-stack';
import { createAppContainer, createSwitchNavigator } from 'react-navigation';

//Importando Cenas
import Home from '../src/screens/Home/Home'
import Feed from '../src/screens/Feed/Feed'
import TipoCadastro from '../src/screens/FluxoCadastro/TipoCadastro'
import Desenvolvedor from '../src/screens/FluxoCadastro/Desenvolvedor'
import Startup from '../src/screens/FluxoCadastro/Startup'
import Google from '../src/screens/FluxoCadastro/Google'
import Linkedin from '../src/screens/FluxoCadastro/Linkedin'
import Senha from '../src/screens/Senha/Senha'
import { createDrawerNavigator } from 'react-navigation-drawer';
import CustomDrawerContentComponent from '../src/components/Drawer'
import EditarPerfil from '../src/screens/FluxoDrawer/EditarPerfil'

const DrawerConfig = {
    contentComponent: ({ navigation }) => {
        return (<CustomDrawerContentComponent navigation={navigation} />)
    }
}

const HomeStack = createStackNavigator({
    Home,
    TipoCadastro,
    Desenvolvedor,
    Google,
    Linkedin,
    Startup,
    Senha,


},
    {
        initialRouteName: 'Home',
        headerMode: "none"
    }

);

const FeedStack = createStackNavigator({
    Feed,
    EditarPerfil
},
    {
        initialRouteName: 'Feed',
        headerMode: "none"
    }

)

const RootNavigator = createSwitchNavigator({
    HomeStack: HomeStack,
    FeedStack: FeedStack

})

const DrawerNavigator = createDrawerNavigator({
    Fluxo: {
        screen: RootNavigator
    },
    Editar: {
        screen: EditarPerfil
    }
},
    DrawerConfig)

export default createAppContainer(DrawerNavigator);
