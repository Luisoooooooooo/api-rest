import { Routes } from '@angular/router';
import { BookSearchComponent } from './components/book-search/book-search.component';

export const routes: Routes = [
  { path: '', redirectTo: 'search', pathMatch: 'full' },
  { path: 'search', component: BookSearchComponent },
];