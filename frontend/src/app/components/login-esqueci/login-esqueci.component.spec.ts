import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { LoginEsqueciComponent } from './login-esqueci.component';

describe('LoginEsqueciComponent', () => {
  let component: LoginEsqueciComponent;
  let fixture: ComponentFixture<LoginEsqueciComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ LoginEsqueciComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(LoginEsqueciComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
