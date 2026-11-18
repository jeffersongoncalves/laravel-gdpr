# Changelog

All notable changes to this project will be documented in this file.

## 2.0.0 - 2026-11-18

### Breaking

- The engine moves to [laravel-privacy](https://github.com/jeffersongoncalves/laravel-privacy), the base shared by the LGPD, GDPR, CCPA, US privacy and Quebec suites. Every class of this package keeps its name and now extends its `JeffersonGoncalves\Privacy` base. If you extend one of them, check your overrides.

### Unchanged

- Config keys, tables, migrations, commands, events and the `#[PersonalData]` declarations: apps need no change.

### Added

- Suites installed side by side (e.g. LGPD and GDPR) only see their own declarations and events.

## 1.0.0 - 2026-11-17

First release: core of a GDPR (Regulation (EU) 2016/679) toolkit for Laravel.

- `#[PersonalData]` on Eloquent models: column, category (personal, special under Art. 9, criminal under Art. 10), purpose, Art. 6(1) lawful basis, retention and anonymize strategy.
- `Gdpr::inventory()` and `gdpr:inventory [--json]` build the data map that feeds your records of processing (Art. 30).
- `exportPersonalData()` (Arts. 15 and 20) and `anonymizePersonalData()` (Art. 17), using the Nullify, Hash (HMAC), Mask or Keep strategies. Anonymizing dispatches `PersonalDataAnonymized`.
- `Gdpr::kAnonymity()`, the `Generalize` helpers and `gdpr:k-anonymity` check that a dataset is really anonymous (Recital 26).

## [Unreleased]
