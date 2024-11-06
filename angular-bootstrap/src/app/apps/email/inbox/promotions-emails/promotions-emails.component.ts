import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { CustomizerSettingsService } from '../../../../customizer-settings/customizer-settings.service';

@Component({
    selector: 'app-promotions-emails',
    standalone: true,
    imports: [RouterLink],
    templateUrl: './promotions-emails.component.html',
    styleUrl: './promotions-emails.component.scss'
})
export class PromotionsEmailsComponent {

    // isToggled
    isToggled = false;

    constructor(
        public themeService: CustomizerSettingsService
    ) {
        this.themeService.isToggled$.subscribe(isToggled => {
            this.isToggled = isToggled;
        });
    }

}