<function name="LoadLanguage" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Called once initially and every time `gmod_language` is changed.<br>
		This will load & fill `SlashCo.LangTable` & if missing, set `SlashCo.LangTableFallback`<br>
		It first always loads the gamemode file `slashco/lang/[lang].lua` and then loads any addon languages by searching `slashco/lang/*/[lang].lua` using <page>SlashCo.LoadFileFromAddons</page><br>
		And if `SlashCo.CurrentLang` is outdated (indicating a language change), it will trigger <page>SlashCo:LanguageChanged</page>
	</description>
	<realm>Client</realm>
</function>