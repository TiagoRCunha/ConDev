import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { FperfilComponent } from './fperfil.component';

describe('FperfilComponent', () => {
  let component: FperfilComponent;
  let fixture: ComponentFixture<FperfilComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ FperfilComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(FperfilComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
