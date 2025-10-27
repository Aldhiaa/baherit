<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Mobile App Development',
                'description' => 'Design and development of mobile applications for iOS and Android using cutting-edge technologies like Flutter and React Native for high performance.',
                'category' => 'development',
                'icon' => 'mobile',
                'features' => [
                    'Design and development of mobile applications for iOS and Android',
                    'Utilization of cutting-edge technologies like Flutter and React Native for high performance',
                    'Integration with websites for a seamless cross-platform experience',
                    'App maintenance and updates to ensure continuity and improved performance'
                ],
                'timeline' => '3-9 months'
            ],
            [
                'title' => 'Website Design & Development',
                'description' => 'Professional UI/UX Design to ensure a seamless user experience with website development using the latest technologies.',
                'category' => 'development',
                'icon' => 'web',
                'features' => [
                    'Professional UI/UX Design to ensure a seamless user experience',
                    'Website development using the latest technologies (HTML, CSS, JS, Laravel, WordPress)',
                    'Responsive design for compatibility across all devices to ensure optimal performance',
                    'E-commerce development with enhanced user experience and speed'
                ],
                'timeline' => '2-8 months'
            ],
            [
                'title' => 'Domain Registration & Email Hosting',
                'description' => 'Domain registration with premium names tailored to your brand and hosting plans that cater to diverse needs.',
                'category' => 'cloud',
                'icon' => 'domain',
                'features' => [
                    'Domain registration with premium names tailored to your brand',
                    'Hosting plans that cater to diverse needs',
                    'Professional email setup using the domain name',
                    'SSL certificate management for secure data protection',
                    '24/7 technical support to ensure uninterrupted service'
                ],
                'timeline' => '1-2 weeks'
            ],
            [
                'title' => 'Network Management & Cybersecurity',
                'description' => 'Design and implementation of network infrastructure for efficient connectivity with system protection against cyberattacks to secure sensitive data.',
                'category' => 'security',
                'icon' => 'security',
                'features' => [
                    'Design and implementation of network infrastructure for efficient connectivity',
                    'Network performance monitoring and quick, professional troubleshooting',
                    'System protection against cyberattacks to secure sensitive data',
                    'Firewall and protection system updates against emerging threats',
                    'Comprehensive security audits and vulnerability assessments for system protection'
                ],
                'timeline' => '1-6 months'
            ],
            [
                'title' => 'IT Support & Technology Solutions',
                'description' => 'Troubleshooting and immediate support to maintain operations with software and app maintenance for enhanced performance.',
                'category' => 'support',
                'icon' => 'support',
                'features' => [
                    'Troubleshooting and immediate support to maintain operations',
                    'Software and app maintenance for enhanced performance',
                    'Device and network setup using the latest technologies',
                    'Data protection and system security against breaches',
                    'Staff training on modern tools and technologies to boost productivity'
                ],
                'timeline' => 'Ongoing'
            ],
            [
                'title' => 'Security & Smart Home Systems',
                'description' => 'Installation of smart doors, intercom systems, surveillance cameras, alarm systems with instant notifications via smart applications.',
                'category' => 'security',
                'icon' => 'smart-home',
                'features' => [
                    'Smart doors: Installation of fingerprint, passcode, or app-controlled doors integrated with smart home systems',
                    'Intercom systems: Advanced intercoms with display screens connected to cameras and smart apps',
                    'Surveillance cameras: High-definition (HD, 4K) cameras with night vision and online monitoring',
                    'Alarm systems: Theft and fire alarm systems with instant notifications via smart applications',
                    'Smart home integration: Control security, lighting, heating, and cooling via mobile for full smart home management'
                ],
                'timeline' => '2-6 months'
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}