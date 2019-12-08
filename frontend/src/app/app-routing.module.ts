import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {SobreNosComponent} from './components/sobre-nos/sobre-nos.component'

const routes: Routes = [
  { path: 'about', component: SobreNosComponent },


];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
