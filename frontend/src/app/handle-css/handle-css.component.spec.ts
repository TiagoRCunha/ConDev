import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { HandleCssComponent } from './handle-css.component';

describe('HandleCssComponent', () => {
  let component: HandleCssComponent;
  let fixture: ComponentFixture<HandleCssComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ HandleCssComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(HandleCssComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
