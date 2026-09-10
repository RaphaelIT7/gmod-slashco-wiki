<function name="PrecacheSlasher" parent="SlashCo" type="libraryfunc">
	<description>
		Precaches a registered slasher's model, chase music and kill sound (whichever are set), and calls the slasher's own <page>Slasher#Precache</page> function if it has one.<br>
		Looks up the slasher definition from `SlashCoSlashers` by name.
	</description>
	<realm>Shared</realm>
	<group>Content</group>
	<args>
		<arg name="slasherName" type="string">Name of the registered slasher (key in `SlashCoSlashers`).</arg>
	</args>
</function>