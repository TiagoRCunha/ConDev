import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

import { ListService } from './list/lists.service';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

import { MatButtonModule, MatIconModule,
         MatExpansionModule, MatInputModule,
         MatTabsModule } from '@angular/material';
import { FormsModule } from '@angular/forms';

import { ListComponent } from './list/list.component';
import { CustomPipesComponent } from './custom-pipes/custom-pipes.component';
import { SummaryPipe } from './summary.pipe';
import { FavoriteComponent } from './favorite/favorite.component';
import { HandleCssComponent } from './handle-css/handle-css.component';
import { DirectivesComponent } from './directives/directives.component';


@NgModule({
  declarations: [
    AppComponent,
    ListComponent,
    CustomPipesComponent,
    SummaryPipe,
    FavoriteComponent,
    HandleCssComponent,
    DirectivesComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    FormsModule,
    MatButtonModule,
    MatIconModule,
    MatExpansionModule,
    MatInputModule,
    MatTabsModule
  ],
  providers: [ ListService ],
  bootstrap: [AppComponent]
})
export class AppModule { }
