<function name="LoadSlasherPatches" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Includes every file in `slashco/patch/slasher/*.lua`.<br>
		These patch files are intended to modify the code of existing slashers after they've been registered.<br>
		Called once automatically when the file is loaded, and again whenever the addon content changes.
	</description>
	<realm>Shared</realm>
	<group>Slasher</group>
</function>
