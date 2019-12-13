import { Component, OnInit } from '@angular/core';
import { MenuItem } from 'primeng/api';

@Component({
  selector: 'app-feed',
  templateUrl: './feed.component.html',
  styleUrls: ['./feed.component.css']
})
export class FeedComponent implements OnInit {
  items: MenuItem[];
  display: boolean = false;
  constructor() { }

  ngOnInit() {
    this.items = [
      { label: 'Perfil', icon: 'pi pi-fw pi-user' },
      { label: 'Eventos', icon: 'pi pi-fw pi-ticket' },
      { label: 'Enpresas', icon: 'pi pi-fw pi-id-card' },
      { label: 'Sobre Nos', icon: 'pi pi-fw pi-users' },
      { label: 'Sair', icon: 'pi pi-fw pi-sign-out' }
    ];

  }
  showDialog() {
    this.display = true;
  }



}

