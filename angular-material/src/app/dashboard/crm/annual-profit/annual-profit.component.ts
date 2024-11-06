import { Component, ViewChild } from '@angular/core';
import { RouterLink } from '@angular/router';
import { MatCardModule } from '@angular/material/card';
import {
    ApexGrid,
    ApexChart,
    ApexXAxis,
    ApexYAxis,
    ApexStroke,
    ApexLegend,
    ChartComponent,
    ApexDataLabels,
    ApexTitleSubtitle,
    NgApexchartsModule,
    ApexAxisChartSeries
} from "ng-apexcharts";
import { CustomizerSettingsService } from '../../../customizer-settings/customizer-settings.service';

export type ChartOptions = {
    grid: ApexGrid;
    yaxis: ApexYAxis;
    labels: string[];
    chart: ApexChart;
    xaxis: ApexXAxis;
    colors: string[];
    stroke: ApexStroke;
    legend: ApexLegend;
    title: ApexTitleSubtitle;
    dataLabels: ApexDataLabels;
    subtitle: ApexTitleSubtitle;
    series: ApexAxisChartSeries;
};

@Component({
    selector: 'app-annual-profit',
    standalone: true,
    imports: [RouterLink, MatCardModule, NgApexchartsModule],
    templateUrl: './annual-profit.component.html',
    styleUrl: './annual-profit.component.scss'
})
export class AnnualProfitComponent {

    @ViewChild("chart") chart: ChartComponent;
    public chartOptions: Partial<ChartOptions>;

    // isToggled
    isToggled = false;

    constructor(
        public themeService: CustomizerSettingsService
    ) {
        this.chartOptions = {
            series: [
                {
                    name: "Revenue Growth",
                    data: [3, 12, 8, 10, 15, 10, 7]
                }
            ],
            chart: {
                type: "area",
                height: 95,
                zoom: {
                    enabled: false
                },
                toolbar: {
                    show: false
                }
            },
            colors: [
                "#C52B09"
            ],
            dataLabels: {
                enabled: false
            },
            grid: {
                show: false,
                borderColor: "#ECEEF2"
            },
            stroke: {
                curve: "monotoneCubic",
                width: 1
            },
            xaxis: {
                categories: [
                    "Mon",
                    "Tue",
                    "Wed",
                    "Thu",
                    "Fri",
                    "Sat",
                    "Sun"
                ],
                axisTicks: {
                    show: false,
                    color: '#ECEEF2'
                },
                axisBorder: {
                    show: false,
                    color: '#ECEEF2'
                },
                labels: {
                    show: false,
                    style: {
                        colors: "#8695AA",
                        fontSize: "12px"
                    }
                }
            },
            yaxis: {
                // tickAmount: 6,
                show: false,
                // max: 150,
                // min: 0,
                labels: {
                    formatter: (val) => {
                        return '$' + val + 'k'
                    },
                    style: {
                        colors: "#64748B",
                        fontSize: "12px"
                    }
                },
                axisBorder: {
                    show: false,
                    color: '#ECEEF2'
                },
                axisTicks: {
                    show: false,
                    color: '#ECEEF2'
                }
            },
            legend: {
                show: false,
                position: 'top',
                fontSize: '12px',
                horizontalAlign: 'left',
                itemMargin: {
                    horizontal: 8,
                    vertical: 0
                },
                labels: {
                    colors: '#64748B'
                },
                markers: {
                    width: 9,
                    height: 9,
                    offsetX: -2,
                    offsetY: -.5,
                    radius: 2
                }
            }
        };
        this.themeService.isToggled$.subscribe(isToggled => {
            this.isToggled = isToggled;
        });
    }

}