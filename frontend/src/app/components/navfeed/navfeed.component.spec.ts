import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { NavfeedComponent } from './navfeed.component';

describe('NavfeedComponent', () => {
  let component: NavfeedComponent;
  let fixture: ComponentFixture<NavfeedComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ NavfeedComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(NavfeedComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
