import { NgModule, ModuleWithProviders, Component } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomePageComponent } from './home-pagen/home-page.component';
import { LoginComponent } from './login/login.component';
import { LoginEsqueciComponent } from './login-esqueci/login-esqueci.component';
import { LoginAlterarComponent } from './login-alterar/login-alterar.component';
import { SignTipoComponent } from './sign-tipo/sign-tipo.component';
import { SignDevComponent } from './sign-dev/sign-dev.component';
import { SignEmpComponent } from './sign-emp/sign-emp.component';


const AppRouter: Routes = [
  { path: '', component: HomePageComponent },
  { path: 'login', component: LoginComponent },
  { path: 'login/loginesqueci', component: LoginEsqueciComponent },
  { path: 'login/loginalterar', component: LoginAlterarComponent },
  { path: 'signtipo', component: SignTipoComponent },
  { path: 'signtipo/signdev', component: SignDevComponent },
  { path: 'signtipo/signemp', component: SignEmpComponent },


];

export const routing: ModuleWithProviders = RouterModule.forRoot(AppRouter)

@NgModule({
  imports: [RouterModule.forRoot(AppRouter)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
