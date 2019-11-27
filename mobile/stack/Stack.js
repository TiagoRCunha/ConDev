import React, { Component } from 'react';
import { createStackNavigator } from 'react-navigation-stack';
import { createAppContainer, createSwitchNavigator } from 'react-navigation';
import { createBottomTabNavigator, createTabNavigator } from 'react-navigation-tabs';

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
import Seguidores from '../src/screens/FluxoDrawer/Seguidores'
import Configuracoes from '../src/screens/FluxoDrawer/Configuracoes'
import Ionicons from 'react-native-vector-icons/Ionicons'
import Notificacoes from '../src/screens/Notificacoes/Notificacoes'
import Jobs from '../src/screens/Jobs/Jobs'
import Chat from '../src/screens/Chat/Chat'
import Postar from '../src/screens/Postar/Postar'

const google = <Ionicons
    name="logo-google"
    size={30}
    color='#000000'
/>

const DrawerConfig = {
    contentComponent: ({ navigation }) => {
        return (<CustomDrawerContentComponent navigation={navigation} />)
    }
}

const TabConfig = {
    contentComponent: ({ navigation }) => {
        return (<TabNavigator navigation={navigation} />)
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
    EditarPerfil,
    Seguidores,
    Configuracoes,
    Jobs,
    Notificacoes,
    Chat
},
    {
        initialRouteName: 'Feed',
        headerMode: "none"
    }

)

const TabNav = createBottomTabNavigator(
    {
      Home: FeedStack,
      Chat: Chat,
      Postar: Postar,
      "Notificações": Notificacoes,
      Jobs: Jobs
    },
    {
      defaultNavigationOptions: ({ navigation }) => ({
        tabBarIcon: ({ focused, horizontal, tintColor }) => {
          const { routeName } = navigation.state;
          if (routeName === 'Home') {

            return <Ionicons name={"ios-today"} size={25} color={tintColor} />;

          } else if (routeName === 'Chat') {

            return <Ionicons name={"ios-chatboxes"} size={25} color={tintColor} />;

          } else if (routeName === 'Postar') {

            return <Ionicons name={"md-add-circle-outline"} size={25} color={tintColor} />;
          
          } else if (routeName === 'Notificações'){
              
            return <Ionicons name={"ios-notifications"} size={25} color={tintColor} />;

          } else if (routeName === 'Jobs'){
              
            return <Ionicons name={"ios-wallet"} size={25} color={tintColor} />;
          }
          
        },
      }),
      tabBarOptions: {
        activeTintColor: 'tomato',
        inactiveTintColor: 'gray',
      },
    }
  );

const RootNavigator = createSwitchNavigator({
    HomeStack: HomeStack,
    TabNavigator: TabNav

}
)

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
