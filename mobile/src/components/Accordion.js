
import React, { Component } from 'react';
import {
    View,
    ScrollView,
    Text,
    Image,
    Switch,
    TouchableOpacity,
    FlatList,
    Alert
} from 'react-native';
import { Collapse, CollapseHeader, CollapseBody, AccordionList } from 'accordion-collapse-react-native';
import MaterialIcons from 'react-native-vector-icons/MaterialIcons'
import { BotaoFuncionarios } from './Button';


const arrowDown2 = <MaterialIcons
    name="keyboard-arrow-down"
    size={30}
    color='#000000'
/>

const arrowUp2 = <MaterialIcons
    name="keyboard-arrow-up"
    size={30}
    color='#000000'
/>


export class Accordion extends Component {
    constructor(props) {
        super(props)
        this.state = {
            arrow2: arrowDown2,
            collapsedDoc: false,
        }
    }
    render() {
        return (
            <Collapse
                isCollapsed={this.state.collapsedDoc}
                onToggle={(isCollapsed) => {
                    if (this.state.arrow2 == arrowDown2) {
                        this.setState({ arrow2: arrowUp2 })
                    } else if (this.state.arrow2 == arrowUp2) {
                        this.setState({ arrow2: arrowDown2 })
                    }
                    this.setState({ collapsedDoc: isCollapsed })
                }
                }
            >
                <CollapseHeader>
                    <View style={{ flexDirection: 'row', justifyContent: 'center' }}>
                        <Text style={{ fontSize: 16, marginVertical: 15 }}>Tamanho da empresa</Text>
                        <View style={{ justifyContent: 'center' }}>
                            {this.state.arrow2}
                        </View>
                        
                    </View>
                </CollapseHeader>
                <CollapseBody>
                    <View>
                        <BotaoFuncionarios
                            onPress={() => this.setState({collapsedDoc: !this.state.collapsedDoc})}
                            quantidade={"1 - 50 funcionários"} />
                        <BotaoFuncionarios
                            onPress={() => this.setState({collapsedDoc: !this.state.collapsedDoc})}
                            quantidade={"51 - 100 funcionários"} />
                        <BotaoFuncionarios
                            onPress={() => this.setState({collapsedDoc: !this.state.collapsedDoc})}
                            quantidade={"101 - 500 funcionários"} />
                        <BotaoFuncionarios
                            onPress={() => this.setState({collapsedDoc: !this.state.collapsedDoc})}
                            quantidade={"500 + funcionários"} />
                    </View>
                </CollapseBody>
            </Collapse>
        );
    }

}

