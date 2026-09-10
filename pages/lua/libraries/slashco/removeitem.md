<function name="RemoveItem" parent="SlashCo" type="libraryfunc">
	<description>
		Clears the given item slot without spawning a dropped entity, calling the item's <page>Item#OnSwitchFrom</page> callback after a short delay.
	</description>
	<realm>Server</realm>
	<group>Items</group>
	<args>
		<arg name="ply" type="Player">The player whose item slot should be cleared.</arg>
		<arg name="isSec" type="boolean" optional>If `true`, clears the secondary slot instead of the primary one.</arg>
	</args>
</function>
