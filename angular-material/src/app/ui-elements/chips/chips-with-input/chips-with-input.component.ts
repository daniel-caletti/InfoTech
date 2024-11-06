import {LiveAnnouncer} from '@angular/cdk/a11y';
import {COMMA, ENTER} from '@angular/cdk/keycodes';
import {Component, inject, signal} from '@angular/core';
import {MatChipEditedEvent, MatChipInputEvent, MatChipsModule} from '@angular/material/chips';
import {MatFormFieldModule} from '@angular/material/form-field';

export interface Fruit {
    name: string;
}

@Component({
    selector: 'app-chips-with-input',
    standalone: true,
    imports: [MatFormFieldModule, MatChipsModule],
    templateUrl: './chips-with-input.component.html',
    styleUrl: './chips-with-input.component.scss'
})
export class ChipsWithInputComponent {

    readonly addOnBlur = true;
    readonly separatorKeysCodes = [ENTER, COMMA] as const;
    readonly fruits = signal<Fruit[]>([{name: 'Lemon'}, {name: 'Lime'}, {name: 'Apple'}]);
    readonly announcer = inject(LiveAnnouncer);

    add(event: MatChipInputEvent): void {
        const value = (event.value || '').trim();

        // Add our fruit
        if (value) {
            this.fruits.update(fruits => [...fruits, {name: value}]);
        }

        // Clear the input value
        event.chipInput!.clear();
    }

    remove(fruit: Fruit): void {
        this.fruits.update(fruits => {
            const index = fruits.indexOf(fruit);
            if (index < 0) {
                return fruits;
            }

            fruits.splice(index, 1);
            this.announcer.announce(`Removed ${fruit.name}`);
            return [...fruits];
        });
    }

    edit(fruit: Fruit, event: MatChipEditedEvent) {
        const value = event.value.trim();

        // Remove fruit if it no longer has a name
        if (!value) {
            this.remove(fruit);
            return;
        }

        // Edit existing fruit
        this.fruits.update(fruits => {
            const index = fruits.indexOf(fruit);
            if (index >= 0) {
                fruits[index].name = value;
                return [...fruits];
            }
            return fruits;
        });
    }

}