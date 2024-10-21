import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { HttpClientModule } from '@angular/common/http';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Observable } from 'rxjs';

@Component({
  selector: 'app-book-search',
  standalone: true,
  imports: [CommonModule, FormsModule, HttpClientModule],
  templateUrl: './book-search.component.html',
  styleUrl: './book-search.component.css'
})
export class BookSearchComponent {
  title: string = '';
  publications: any[] = [];

  constructor(private http: HttpClient) {}

  searchBook(): void {
    this.checkBookExists(this.title).subscribe((publications) => {
      this.publications = publications;
    });
  }

  checkBookExists(title: string): Observable<any[]> {
    return this.http.get<any[]>(`http://localhost:8000/api/books/search?title=${title}`);
  }
}
