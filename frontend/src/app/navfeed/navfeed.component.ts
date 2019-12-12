import { Component, OnInit } from '@angular/core';
import { MenuItem } from 'primeng/api';

@Component({
  selector: 'app-navfeed',
  templateUrl: './navfeed.component.html',
  styleUrls: ['./navfeed.component.css']
})
export class NavfeedComponent implements OnInit {

  items: MenuItem[];

  text: string;
  results: string[];

  constructor() { }

  ngOnInit() {
    this.items = [
      { label: 'Perfil', icon: 'pi pi-fw pi-user', routerLink: ['/perfil'] },
      { label: 'Eventos', icon: 'pi pi-fw pi-ticket', routerLink: ['/feed'] },
      { label: 'Enpresas', icon: 'pi pi-fw pi-id-card' },
      { label: 'Sobre Nos', icon: 'pi pi-fw pi-users', routerLink: ['/sobrenos'] },
      { label: 'Sair', icon: 'pi pi-fw pi-sign-out' }
    ];


    // search(event) {
    //   this.mylookupservice.getResults(event.query).then(data => {
    //     this.results = data;
    //   });
    // }

  }
}
