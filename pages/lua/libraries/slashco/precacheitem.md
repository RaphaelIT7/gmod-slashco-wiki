<function name="PrecacheItem" parent="SlashCo" type="libraryfunc">
	<description>
		Precaches a registered item's model, view model, holstered world model and world model (whichever are set), and calls the item's own <page>ITEM#Precache</page> function if it has one.<br>
		Looks up the item definition from `SlashCoItems` by name.
	</description>
	<realm>Shared</realm>
	<group>Content</group>
	<args>
		<arg name="itemName" type="string">Name of the registered item (key in `SlashCoItems`).</arg>
	</args>
</function>