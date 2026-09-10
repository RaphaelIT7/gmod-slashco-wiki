<function name="LoadFileFromAddons" parent="SlashCo" type="libraryfunc">
	<description>
		Includes a lua file from every folder that matches a `*` wildcard in the given path, e.g. `"content/*/init.lua"` includes `init.lua` from every subfolder of `content/`.<br>
		Every matching file is also added as a client file via [AddCSLuaFile](https://wiki.facepunch.com/gmod/AddCSLuaFile) before being included.
	</description>
	<realm>Shared</realm>
	<group>Content</group>
	<args>
		<arg name="fileName" type="string">Path containing exactly one `*` wildcard for the folder name to search.</arg>
	</args>
</function>