<function name="EnablePerk" parent="SlashCo" type="libraryfunc">
	<description>
		Requests that the server enable a perk for the local player.<br>
		The player must own the perk and satisfy all requirements checked by <page>SlashCo.CanEquipPerk</page><br>
		Can only be processed while in the lobby.
	</description>
	<realm>Client</realm>
	<args>
		<arg name="perkID" type="string">ID of the perk to enable</arg>
	</args>
</function>