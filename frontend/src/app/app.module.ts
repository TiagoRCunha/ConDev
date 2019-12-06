import { BrowserModule } from '@angular/platform-browser';
import { NgModule, CUSTOM_ELEMENTS_SCHEMA  } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

import {CalendarModule} from 'primeng/calendar';
import {PickListModule} from 'primeng/picklist';

//Meus imports
import {CardModule} from 'primeng/card';
import {CarouselModule} from 'primeng/carousel';
import {ChartModule} from 'primeng/chart';
import {DialogModule} from 'primeng/dialog';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { NavbarComponent } from './navbar/navbar.component';
import { HomeComponent } from './components/home/home.component'
import { SidebarModule } from 'primeng/sidebar';
import {MenubarModule} from 'primeng/menubar';
import {InputTextModule} from 'primeng/inputtext';
import {CheckboxModule} from 'primeng/checkbox';
import {DropdownModule} from 'primeng/dropdown';

@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    HomeComponent,
  
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
    
  
  ],
  schemas: [
    CUSTOM_ELEMENTS_SCHEMA
],
  providers: [

   
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }

