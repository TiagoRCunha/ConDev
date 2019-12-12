import { NgModule, ModuleWithProviders, Component } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomePageComponent } from './home-pagen/home-page.component';
import { LoginComponent } from './login/login.component';
import { LoginEsqueciComponent } from './login-esqueci/login-esqueci.component';
import { LoginAlterarComponent } from './login-alterar/login-alterar.component';
import { SignTipoComponent } from './sign-tipo/sign-tipo.component';
import { SignDevComponent } from './sign-dev/sign-dev.component';
import { SignEmpComponent } from './sign-emp/sign-emp.component';
import { FeedComponent } from './feed/feed.component';
import { FperfilComponent } from './fperfil/fperfil.component';
import { SobreNosComponent } from './sobre-nos/sobre-nos.component';


const AppRouter: Routes = [
  { path: '', component: HomePageComponent },
  { path: 'login', component: LoginComponent },
  { path: 'login/loginesqueci', component: LoginEsqueciComponent },
  { path: 'login/loginalterar', component: LoginAlterarComponent },
  { path: 'signtipo', component: SignTipoComponent },
  { path: 'signtipo/signdev', component: SignDevComponent },
  { path: 'signtipo/signemp', component: SignEmpComponent },

  { path: 'feed', component: FeedComponent },
  { path: 'perfil', component: FperfilComponent },
  { path: 'sobrenos', component: SobreNosComponent },

];

export const routing: ModuleWithProviders = RouterModule.forRoot(AppRouter)

@NgModule({
  imports: [RouterModule.forRoot(AppRouter)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
