import { BrowserModule } from '@angular/platform-browser';
import { NgModule, CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { CalendarModule } from 'primeng/calendar';
import { PickListModule } from 'primeng/picklist';

//Meus imports

import { NavbarComponent } from './navbar/navbar.component';
import { MenubarModule } from 'primeng/menubar';
import { CheckboxModule } from 'primeng/checkbox';
import { DropdownModule } from 'primeng/dropdown';
import { CardModule } from 'primeng/card';
import { CarouselModule } from 'primeng/carousel';
import { ChartModule } from 'primeng/chart';
import { DialogModule } from 'primeng/dialog';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { HomeComponent } from './components/home/home.component'
import { SidebarModule } from 'primeng/sidebar';
import { MessageService } from 'primeng/api';
import { ComponenteExemploComponent } from './components/componente-exemplo/componente-exemplo.component';
import { MessagesModule } from 'primeng/messages';
import { MessageModule } from 'primeng/message';
import { ToastModule } from 'primeng/toast';
import { ConfirmDialogModule } from 'primeng/confirmdialog';
import { ConfirmationService } from 'primeng/api';
import { TooltipModule } from 'primeng/tooltip';
import { LightboxModule } from 'primeng/lightbox';
import { CommonModule } from '@angular/common';
import { TabViewModule } from 'primeng/tabview';
import { CodeHighlighterModule } from 'primeng/codehighlighter';
import { FileUploadModule } from 'primeng/fileupload';
import { HttpClientModule } from '@angular/common/http';
import { EditarPerfilComponent } from './components/editar-perfil/editar-perfil.component';
import { InputTextModule } from 'primeng/inputtext';
import { PasswordModule } from 'primeng/password';
import { SplitButtonModule } from 'primeng/splitbutton';
import { InputTextareaModule } from 'primeng/inputtextarea';
import { DivulgarComponent } from './components/divulgar/divulgar.component';
import { InputSwitchModule } from 'primeng/inputswitch';
import { SideBarConfigComponent } from './components/side-bar-config/side-bar-config.component';
import { SobreNosComponent } from './components/sobre-nos/sobre-nos.component';

//Novos
import { FormsModule } from '@angular/forms';

@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    HomeComponent,
    DivulgarComponent,
    ComponenteExemploComponent,
    EditarPerfilComponent,
    SideBarConfigComponent,
    SobreNosComponent,

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

