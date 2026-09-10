<function name="RegisterAddon" parent="SlashCo" type="libraryfunc">
	<description>
		Registers a mounted workshop addon as a SlashCo addon by its workshop ID, adding it to <page>SlashCo.GetAddons</page> and, Server-side, queuing it for client download via [resource.AddWorkshop](https://wiki.facepunch.com/gmod/resource.AddWorkshop).<br>
		This normally isn't required, as any addon containing a `lua/slashco` folder is auto-detected by <page>SlashCo.FindSlashCoAddons</page>. Addons that don't match that check can call this from the <page>SlashCo:RegisterAddons</page> hook instead.
	</description>
	<realm>Shared</realm>
	<group>Content</group>
	<args>
		<arg name="workshopid" type="string">The workshop ID of the addon to register.</arg>
	</args>
	<rets>
		<ret name="success" type="boolean">`true` if the addon was already registered or was found and registered, `false` if no mounted addon with that workshop ID exists.</ret>
	</rets>
</function>