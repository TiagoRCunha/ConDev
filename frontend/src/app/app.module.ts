import { BrowserModule } from '@angular/platform-browser';
import { NgModule, CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

//Meus imports

import { CalendarModule } from 'primeng/calendar';
import { PickListModule } from 'primeng/picklist';
import { NavbarComponent } from './navbar/navbar.component';
import { MenubarModule } from 'primeng/menubar';
import { CheckboxModule } from 'primeng/checkbox';
import { DropdownModule } from 'primeng/dropdown';
import { CardModule } from 'primeng/card';
import { CarouselModule } from 'primeng/carousel';
import { ChartModule } from 'primeng/chart';
import { DialogModule } from 'primeng/dialog';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
// import { HomeComponent } from './components/home/home.component'
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
import { SideBarConfigComponent } from './components/side-bar-config/side-bar-config.component';
import { SobreNosComponent } from './components/sobre-nos/sobre-nos.component';

//Novos
import { FormsModule } from '@angular/forms';
import { EditarPerfilComponent } from './components/editar-perfil/editar-perfil.component';
import { DivulgarComponent } from './components/divulgar/divulgar.component';
import { HomePageComponent } from './home-pagen/home-page.component';
import { LoginComponent } from './login/login.component';
import { LoginEsqueciComponent } from './login-esqueci/login-esqueci.component';
import { LoginAlterarComponent } from './login-alterar/login-alterar.component';
import { SignTipoComponent } from './sign-tipo/sign-tipo.component';
import { SignDevComponent } from './sign-dev/sign-dev.component';
import { SignEmpComponent } from './sign-emp/sign-emp.component';

@NgModule({
  declarations: [
    AppComponent,
    DivulgarComponent,
    ComponenteExemploComponent,
    EditarPerfilComponent,
    SideBarConfigComponent,
    SobreNosComponent,
    HomePageComponent,
    LoginComponent,
    LoginEsqueciComponent,
    LoginAlterarComponent,
    SignTipoComponent,
    SignDevComponent,
    SignEmpComponent,

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
    // routing,



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

