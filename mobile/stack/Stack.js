import { createStackNavigator } from 'react-navigation-stack';
import { createAppContainer, createSwitchNavigator } from 'react-navigation';

//Importando Cenas
import Home from '../src/screens/Home/Home'
import TipoCadastro from '../src/screens/FluxoCadastro/TipoCadastro'
import Desenvolvedor from '../src/screens/FluxoCadastro/Desenvolvedor'
import Startup from '../src/screens/FluxoCadastro/Startup'
import Google from '../src/screens/FluxoCadastro/Google'
import Linkedin from '../src/screens/FluxoCadastro/Linkedin'
import Senha from '../src/screens/Senha/Senha'


const AppNavigator = createStackNavigator({
    Home,
    TipoCadastro,
    Desenvolvedor,
    Google,
    Linkedin,
    Startup,
    Senha
},
    {
        initialRouteName: 'Home',
        headerMode: "none"
    }

);

export default createAppContainer(AppNavigator);
