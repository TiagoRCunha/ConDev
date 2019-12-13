import { BrowserModule } from '@angular/platform-browser';
import { NgModule, CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { AppComponent } from './app.component';

//Meus imports

import { CalendarModule } from 'primeng/calendar';
import { PickListModule } from 'primeng/picklist';

import { MenubarModule } from 'primeng/menubar';
import { CheckboxModule } from 'primeng/checkbox';
import { DropdownModule } from 'primeng/dropdown';
import { CardModule } from 'primeng/card';
import { CarouselModule } from 'primeng/carousel';
import { ChartModule } from 'primeng/chart';
import { DialogModule } from 'primeng/dialog';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { SidebarModule } from 'primeng/sidebar';
import { MessageService } from 'primeng/api';
import { MessagesModule } from 'primeng/messages';
import { MessageModule } from 'primeng/message';
import { ToastModule } from 'primeng/toast';
import { ConfirmDialogModule } from 'primeng/confirmdialog';
import { ConfirmationService } from 'primeng/api';
import { TooltipModule } from 'primeng/tooltip';
import { LightboxModule } from 'primeng/lightbox';
import { TabViewModule } from 'primeng/tabview';
import { CodeHighlighterModule } from 'primeng/codehighlighter';
import { FileUploadModule } from 'primeng/fileupload';
import { InputTextModule } from 'primeng/inputtext';
import { PasswordModule } from 'primeng/password';
import { SplitButtonModule } from 'primeng/splitbutton';
import { InputTextareaModule } from 'primeng/inputtextarea';
import { ComponenteExemploComponent } from './components/componente-exemplo/componente-exemplo.component';
import { CommonModule } from '@angular/common';
import { HttpClientModule } from '@angular/common/http';
import { InputSwitchModule } from 'primeng/inputswitch';
import { MenuModule, MenuItemContent } from 'primeng/menu';
import { ToolbarModule } from 'primeng/toolbar';
import { AutoCompleteModule } from 'primeng/autocomplete';

//Novos
import { FormsModule } from '@angular/forms';
import { EditarPerfilComponent } from './components/editar-perfil/editar-perfil.component';
import { DivulgarComponent } from './components/divulgar/divulgar.component';
import { SobreNosComponent } from './components/sobre-nos/sobre-nos.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { HomePageComponent } from './components/home-pagen/home-page.component';
import { LoginComponent } from './components/login/login.component';
import { LoginEsqueciComponent } from './components/login-esqueci/login-esqueci.component';
import { LoginAlterarComponent } from './components/login-alterar/login-alterar.component';
import { SignTipoComponent } from './components/sign-tipo/sign-tipo.component';
import { SignDevComponent } from './components/sign-dev/sign-dev.component';
import { SignEmpComponent } from './components/sign-emp/sign-emp.component';
import { FeedComponent } from './components/feed/feed.component';
import { NavfeedComponent } from './components/navfeed/navfeed.component';
import { FperfilComponent } from './components/fperfil/fperfil.component';
import { AppRoutingModule, routing } from './app.routing.module';


@NgModule({
  declarations: [
    AppComponent,
    DivulgarComponent,
    ComponenteExemploComponent,
    EditarPerfilComponent,
    SobreNosComponent,

    NavbarComponent,
    HomePageComponent,
    LoginComponent,
    LoginEsqueciComponent,
    LoginAlterarComponent,
    SignTipoComponent,
    SignDevComponent,
    SignEmpComponent,

    FeedComponent,
    NavfeedComponent,
    FperfilComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    CalendarModule,
    PickListModule,
    CardModule,
    CarouselModule,
    ChartModule,
    DialogModule,
    BrowserAnimationsModule,
    SidebarModule,
    MenubarModule,
    InputTextModule,
    CheckboxModule,
    DropdownModule,
    MessagesModule,
    MessageModule,
    ToastModule,
    InputTextareaModule,
    SplitButtonModule,
    PasswordModule,
    HttpClientModule,
    FileUploadModule,
    CodeHighlighterModule,
    TabViewModule,
    CommonModule,
    LightboxModule,
    TooltipModule,
    ConfirmDialogModule,
    InputSwitchModule,
    FormsModule,
    MenuModule,
    ToolbarModule,
    AutoCompleteModule,

    routing,



  ],
  schemas: [
    CUSTOM_ELEMENTS_SCHEMA
  ],
  providers: [
    MessageService,
    ConfirmationService,
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }

